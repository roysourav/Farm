
@include( 'partials._header' )

@include( 'AccountViews._AccountSidebar' )
<!-- Main content -->
   <section class="content">

            @yield('content')

 </section><!-- /.content -->
        

</div><!-- /.content-wrapper -->
    

 @include( 'partials._footer' )