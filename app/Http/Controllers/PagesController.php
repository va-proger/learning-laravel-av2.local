<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Student;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function helloPage()
    {
        return view('hello', [
            "name" => "Andrey", 
            "skills" => ["HTML5", "CSS3", "JavaScript", "Python", "PHP", "SCSS", "PUG", "Laravel", "WordPress", "Bitrix", "MODX", "Git"]
        ]);
    }
    public function todosPage()
    {
        /**
         * 
         * Create
         * 
         */
        // $todo = new Todo();
        // $todo->title = "Дочитать книгу";
        // $todo->note = "Начиная с 99 странице";

        // $todo = $todo->save();
        // dd($todo);

        // $todo = Todo::create([
        //     "title" => "Дочитать книгу",
        //     "note" => "Начиная с 99 странице"
        // ]);

        $todo = Todo::find(6);

        /**
         * 
         * Найти элемент и изминение данных поле 
         * 
         */
        // if($todo){
        //     $todo->status = 1;
        //     $todo->save(); 
        // }
        /**
         * 
         *  удаление элемента 
         * 
         */
        // $todo->delete();
        /**
         * 
         * Получение всех полей
         * 
         */
        $todos = Todo::all();
        return view('todos', [
            "todos" => $todos
        ]);
    }
    public function todosDone()
    {
        $todos = Todo::where('status', 1)->get();
        return view('todos_done', [
            "todos" => $todos
        ]);
    }

    public function todosNoteDone()
    {
        $todos = Todo::where('status', 0)->get();
        return view('todos_not_done', [
            "todos" => $todos
        ]);
    }
    public function studentsPage()
    {
        $students = Student::all();
        return view('students', [
            "students" => $students
        ]);
    }
}
