@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Add User</h2>
                    </header>
                    <div class="card-body">
                        <form action="" class="es-form es-add-form">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Studen Name</label>
                                    <input type="text" placeholder="Alexa">
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Guardian Name</label>
                                    <input type="text" placeholder="Alexander">
                                </div>

                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Email</label>
                                    <input type="email" placeholder="example@gmail.com">
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Phone</label>
                                    <input type="tel" placeholder="+99123456780">
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="class">Class</label>
                                    <select id="class" class="es-add-select">
                                        <option data-display="X">X</option>
                                        <option value="1">iX</option>
                                        <option value="2">Viii</option>
                                        <option value="3">Vii</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="section">Section</label>
                                    <select id="section" class="es-add-select">
                                        <option data-display="A">A</option>
                                        <option value="1">B</option>
                                        <option value="2">C</option>
                                    </select>
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="photo">Add Student Photo</label>
                                    <input id="photo" type="text" placeholder="Drag & Drop Hero">
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                    <a href="" class="btn btn-danger btn-block bg-gradient border-0 text-white">Add</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection