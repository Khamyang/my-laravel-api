@extends('layout.index')
@section('content')
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">ໜ້າແລກ</a></li>
              <li class="breadcrumb-item active">ຂໍ້ມູນພະນັກງານ</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <a href="{{route('employee.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-add"></i>ເພີ່ມໃໝ່</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ລດ</th>
                    <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                    <th>ເບີໂທລະສັບ</th>
                    <th>ທີ່ຢູ່</th>
                    <th>ປູ່ມຄຳສັ່ງ</th>
                  </tr>
                  </thead>
                  <tbody>

                      @php
                        $stt = 1;    
                      @endphp

                      @foreach ($emp as $item)
                        <tr>
                            <td>{{$stt++}}</td>
                            <td>{{$item->firstname}} {{$item->lastname}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->address}}</td>
                            <td>
                                <a href="{{ route('employee.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{ route('employee.show', $item->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                            <!--
                            <td>
                                <form action=" {{ route('employee.destroy', $item->id) }} " method="POST">
                                    @csrf
                                    @method('DELETE')
          
                                    <a href="{{ route('employee.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?')"><i class="fas fa-trash"></i></button>
                            </td>-->
                        </tr>
                      @endforeach
                  
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection