@extends('blank')

@section('content')

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>COW</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-area-chart"></i>
                </div>
                <a class="small-box-footer" href="{{ route('cow.index') }}">
                  Enter &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>MILK</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-flask"></i>
                </div>
                <a class="small-box-footer" href="{{ route('milk.index') }}">
                  Enter &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>HRM</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a class="small-box-footer" href="{{ route('employee.index') }}">
                 Enter &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>ACCOUNTS</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calculator"></i>
                </div>
                <a class="small-box-footer" href="{{ route('utility.index') }}">
                  Enter &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>STOCK & CONS.</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-database"></i>
                </div>
                <a class="small-box-footer" href="{{ route('vaccine.index') }}">
                 Enter &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>REPORTS</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a class="small-box-footer" href="#">
                 Comming Soon &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->

@stop
