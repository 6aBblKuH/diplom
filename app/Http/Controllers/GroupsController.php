<?php namespace App\Http\Controllers;

use App\Groups;
use App\Schedules;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;

use Frozennode\Administrator\Menu;
use Illuminate\Http\Request;

class GroupsController extends Controller {
    
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Groups $groupsModel)
	{
        $this->data['groups'] = !\Auth::check() ? $groupsModel->getActiveGroups() : $groupsModel->getAllGroups();
        return view('groups.main', $this->data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Schedules $schedulesModel, $group)
	{
        if (Auth::check()) {
            $schedule = $schedulesModel->getSchedule($group);
            $this->data['schedules'] = $schedule;
            return view('groups.group_schedule', $this->data);
        }else {
            return view('errors.404');
        }
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
