<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMatkulRequest;
use App\Http\Requests\UpdateMatkulRequest;
use App\Repositories\MatkulRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MatkulController extends AppBaseController
{
    /** @var MatkulRepository $matkulRepository*/
    private $matkulRepository;

    public function __construct(MatkulRepository $matkulRepo)
    {
        $this->matkulRepository = $matkulRepo;
    }

    /**
     * Display a listing of the Matkul.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $matkuls = $this->matkulRepository->all();

        return view('matkuls.index')
            ->with('matkuls', $matkuls);
    }

    /**
     * Show the form for creating a new Matkul.
     *
     * @return Response
     */
    public function create()
    {
        return view('matkuls.create');
    }

    /**
     * Store a newly created Matkul in storage.
     *
     * @param CreateMatkulRequest $request
     *
     * @return Response
     */
    public function store(CreateMatkulRequest $request)
    {
        $input = $request->all();

        $matkul = $this->matkulRepository->create($input);

        Flash::success('Matkul saved successfully.');

        return redirect(route('matkuls.index'));
    }

    /**
     * Display the specified Matkul.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $matkul = $this->matkulRepository->find($id);

        if (empty($matkul)) {
            Flash::error('Matkul not found');

            return redirect(route('matkuls.index'));
        }

        return view('matkuls.show')->with('matkul', $matkul);
    }

    /**
     * Show the form for editing the specified Matkul.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $matkul = $this->matkulRepository->find($id);

        if (empty($matkul)) {
            Flash::error('Matkul not found');

            return redirect(route('matkuls.index'));
        }

        return view('matkuls.edit')->with('matkul', $matkul);
    }

    /**
     * Update the specified Matkul in storage.
     *
     * @param int $id
     * @param UpdateMatkulRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMatkulRequest $request)
    {
        $matkul = $this->matkulRepository->find($id);

        if (empty($matkul)) {
            Flash::error('Matkul not found');

            return redirect(route('matkuls.index'));
        }

        $matkul = $this->matkulRepository->update($request->all(), $id);

        Flash::success('Matkul updated successfully.');

        return redirect(route('matkuls.index'));
    }

    /**
     * Remove the specified Matkul from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $matkul = $this->matkulRepository->find($id);

        if (empty($matkul)) {
            Flash::error('Matkul not found');

            return redirect(route('matkuls.index'));
        }

        $this->matkulRepository->delete($id);

        Flash::success('Matkul deleted successfully.');

        return redirect(route('matkuls.index'));
    }
}
