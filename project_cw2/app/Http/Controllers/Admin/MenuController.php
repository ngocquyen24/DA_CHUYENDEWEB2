<?php

namespace App\Http\Controllers\Admin;

<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Http\Services\Menu\MenuService;
use App\Models\Menu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
=======
=======
>>>>>>> danhmuc_list
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Services\Menu\MenuService;
use App\Http\Requests\Menu\CreateFormRequest;

<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
<<<<<<< HEAD
<<<<<<< HEAD

    public function create()
    {
        return view('admin.menu.add', [
            'title' => 'Thêm Danh Mục Mới',
            'menus' => $this->menuService->getParent()
        ]);
    }

    public function store(CreateFormRequest $request)
    {
        $this->menuService->create($request);

        return redirect()->back();
    }

    public function index()
    {
        return view('admin.menu.list', [
            'title' => 'Danh Sách Danh Mục Mới Nhất',
            'menus' => $this->menuService->getAll()
        ]);
    }

    public function show(Menu $menu)
    {
        return view('admin.menu.edit', [
            'title' => 'Chỉnh Sửa Danh Mục: ' . $menu->name,
            'menu' => $menu,
            'menus' => $this->menuService->getParent()
        ]);
    }

    public function update(Menu $menu, CreateFormRequest $request)
    {
        $this->menuService->update($request, $menu);

        return redirect('/admin/menus/list');
    }

    public function destroy(Request $request): JsonResponse
    {
        $result = $this->menuService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }

        return response()->json([
            'error' => true
=======
=======
>>>>>>> danhmuc_list
    public function create(){
       return view('admin.menu.add' ,[
           'title'=> 'them danh muc ',
           'menus' => $this->menuService->getParent()
       ]);
    }
    public function store(CreateFormRequest $request)
    {
        $this->menuService->create($request);
        return redirect()->back();


    }
    public function index()
    {
        return view('admin.menu.list', [
            'title'=>'danh sách danh mục mới nhất',
            'menus'=>$this->menuService->getAll()

<<<<<<< HEAD
>>>>>>> danhmuc_list
=======
>>>>>>> danhmuc_list
        ]);
    }
}
