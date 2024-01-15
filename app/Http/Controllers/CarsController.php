<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Category;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

class CarsController extends Controller
{
    public function index(Request $request)
    {
        //phương thức tĩnh all() trong một lớp Car để lấy danh sách tất cả các xe.
        // Sau đó, mã trả về một view có tên là 'cars.index' để hiển thị danh sách các xe.
        $car = Cars::all();
        // dd($cars);
        return view('cars.index', ['cars' => $car,]);


        //filter,lấy tùy chọn
        // $cars = cars::where('name', '=', 'BMW')
        // ->get();
        //return view('cars.index', ['cars' => $cars,]);


        //là một phương thức được sử dụng trong truy vấn dữ liệu để lấy bản ghi đầu tiên từ cơ sở dữ liệu 
        //hoặc ném một ngoại lệ nếu không tìm thấy bản ghi nào.
        // $car = cars::where('name', '=', 'BMW')
        //     ->firstOrFail();
        // return view('cars.index', ['cars' => $cars,]);
    }


    public function create()
    {
        $categories = Category::all();
        //with truyen du lieu tu controller -> view
        //chuyen huong sang trang nhap thong tin cua ban ghi moi
        return view('cars.create')->with('categories', $categories);
    }

    //store sau khi bam submit thi store la noi nhan request
    public function store(Request  $request)
    {
        //dd($request->file('image')->guessExtension());//jpg, jpeg,...
        //dd($request->file('image')->getSize()); //dung luong
        //dd($request->file('image')->getMimeType());//check xem dung file anh khong
        //dd($request->file('image')->getClientOriginalName()); //ten file anh
        // dd($request->file('image')->getError()); //0
        // dd($request->file('image')->isValid()); //tra ve dungg
        $request->validate([
            'name' => 'required',
            'count' => 'required|integer|min:0|max:200',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:10000'
        ]);
        //khi upload 2 anh cung luc thi se bi ghi de
        //ta them radom name cho anh, random so va chu
        $generatedImageName = 'image' . time() . '-'
            . $request->name . '.'
            . $request->image->extension();
        $request->image->move(public_path('images'), $generatedImageName);
        // dd($request->all());
        //note:validate 
        // Các quy tắc validate dữ liệu thường được xác định dựa trên các yêu cầu cụ thể của ứng dụng và 
        //loại dữ liệu đang được xử lý. Ví dụ, trong quá trình validate dữ liệu, bạn có thể kiểm tra các yêu cầu như:
        // Độ dài tối thiểu và tối đa của một chuỗi ký tự.
        // Định dạng hợp lệ của một địa chỉ email.
        // Giá trị phải nằm trong một khoảng giá trị cho phép.
        // Kiểm tra tính duy nhất của một giá trị trong cơ sở dữ liệu.
        // Kiểm tra tính hợp lệ của định dạng ngày tháng.
        // Và nhiều quy tắc validate khác tùy thuộc vào yêu cầu cụ thể.

        //validate data
        // $request->validate([
        //     'name' => 'required|unique:cars',
        //     'count' => 'required|integer|min:0|max:200',
        //     'category_id' => 'required',

        // ]);
        //thay the bang 
        //neu validate dung thi thuc thi dong duoi
        // $request->validated();

        //case2
        // //tro? vao table
        // dd($request);
        $car = Cars::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path'=>$generatedImageName   
        ]);
        //save database;
        $car->save();
        return redirect('/cars');
    }

    public function show(string $id)
    {
        // dd('this showwww'.$id);
        //truy van cars
        $car = Cars::find($id);
        // $category = $car->category();
        //truy van category
        $category = Category::find($car->category_id);
        //in
        // dd($category);
        $car->category = $category;
        // dd($car);
        return view('cars.show')->with('car', $car);
    }


    public function edit(string $id)
    {
        //chi update nhung id duoc goi,tim dung id day
        $car = Cars::find($id);
        // dd($car);
        return view('cars.edit')->with('car', $car);
    }


    public function update(CreateValidationRequest $request, string $id)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'count' => 'required|integer|min:0|max:200',
        //     'description' => 'required',
        // ]);
        //thay the bang
        $request->validated();

        //tro thang vao id do
        $car = Cars::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'count' => $request->input('count'),

            ]);
        // tra ve trang cars
        return redirect('/cars');
    }

    public function destroy(string $id)
    {
        //goi lai id
        $car = Cars::find($id);
        $car->delete();
        //    dd($id);
        return redirect('/cars');
    }
}
