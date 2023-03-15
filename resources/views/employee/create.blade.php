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
              <h4 class="card-title">ເພີ່ມໃໝ່</h4>
            </div>

            @if(count($errors)>0)
              <div class="card-body">
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fas fa-ban"> ມີບັນຫາ</i></br>
                  @foreach($errors->all() as $error)
                  {{$error}} </br>
                  @endforeach
                </div>
              </div>
            @endif 

            <form method="POST" action="{{route('employee.store')}}">
                @csrf
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname">ຊື່ພະນັກງານ</label>
                                <input type="text" class="form-control" name="firstname" placeholder="ຊື່ພະນັກງານ">
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname">ນາມສະກຸນ</label>
                                <input type="text" class="form-control" name="lastname" placeholder="ນາມສະກຸນ">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">ເບີ້ໂທລະສັບ</label>
                                <input type="text" class="form-control" name="phone" placeholder="ເບີ້ໂທລະສັບ">
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">ທີ່ຢູ່ປະຈຸບັນ</label>
                                <input type="text" class="form-control" name="address" placeholder="ທີ່ຢູ່ປະຈຸບັນ">
                              </div>
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">ບັນທຶກ</button>
                    <a class="btn btn-warning" href="{{route('employee.index')}}" >ກັບຄືນ</a>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection