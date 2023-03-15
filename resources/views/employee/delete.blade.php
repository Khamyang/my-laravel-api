@extends('layout.index')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ຂໍ້ມູນພະນັກງານ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">ໜ້າແລກ</a></li>
            <li class="breadcrumb-item active">ຂໍ້ມູນພະນັກງານ</li>
          </ol>
        </div>
      </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">ລຶບຂໍ້ມູນ</h4>
            </div>
            <form method="POST" action="{{route('employee.destroy', $emp->id)}}">
                @csrf
                @method('DELETE')
                
                <div class="card-body">
                    <p>ທ່ານຕ້ອງການລຶບຂໍ້ມູນ {{$emp->firstname}} {{$emp->lastname}} ຫຼື ບໍ?</p>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">ລຶບຂໍ້ມູນ</button>
                    <a class="btn btn-warning" href="{{route('employee.index')}}" >ກັບຄືນ</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection