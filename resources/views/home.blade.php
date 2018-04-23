@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Кабинет ответственного за нагрузку</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-3 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Направления подготовки <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Нагрузка кафедры
                </a>
              </li>
            </ul>
                </div>
                </div>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Направления поготовки</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>
          </p>
            <p><b>Выберите направление подготовки:</b><Br>
            <input type="radio" name="direction" value="ivt"> 09.03.01: Информатика и вычислительная техника<Br>
            <input type="radio" name="direction" value="ist"> 09.03.02: Информационные системы и технологии<Br>
            <input type="radio" name="direction" value="atpip"> 15.03.04: Автоматизация технологических процессов и производств<Br>
            <input type="radio" name="direction" value="saiu"> 27.03.03: Системный анализ и управление<Br>
            <input type="radio" name="direction" value="saiu"> 27.03.04: Управление в технических системах<Br>
          </p>
           <p><input type="submit" value="Готово"></p>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
        </div>
    </div>
</div>
@endsection
