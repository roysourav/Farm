@include( 'partials._header' )

@include( 'HrmViews._HrmSidebar' )
<!-- Main content -->
   <section class="content">

            @yield('content')

 </section><!-- /.content -->
        

</div><!-- /.content-wrapper -->
    

 @include( 'partials._footer' )