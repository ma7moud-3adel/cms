<?php

namespace App\Http\Controllers\Dashboard\Shared\User;

use App\Http\Controllers\Controller;
use Domain\Shared\DataTables\UserDataTable;
use Domain\Shared\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.shared.user.index', compact('users'));
    }

    public function indexDatatable(UserDataTable $dataTable)
    {
        return $dataTable->render('dashboard.product.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = User::findOrFail($id);
        $deleted->delete();

        return redirect()->back()->with('danger', 'City is Deleted Successfully');
    }
}
