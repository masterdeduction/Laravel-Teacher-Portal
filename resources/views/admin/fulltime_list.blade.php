@extends('layouts.admin')
@section('content')
<br><br><br>
<style>

.force_resize {
	max-height: 120px;
max-width: 120px;
min-height: 120px;
min-width: 120px;
width: 120px;
height: 120px;
}
.user-list {
	background: #333;
}
.users-list>li img {
    border-radius: 0%;
}
img{
	box-shadow: 10px 10px 5px #888888;
	
}
</style>
    <section class="content">
<div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-aqua">
                <div class="box-header text-center with-border">
                  <h3 class="box-title ">@if (Request::segment(1) == 'manage')
                  	Full Time
                  	@else
                  	Part Time
                  @endif Teachers</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-success diri_count"></span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding" style="display: block;">
            <div class="input-group col-xs-3 pull-right">
                <input type="text" class="form-control" id="filter" placeholder="Search Teacher">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
              </div><br><br>
              <div class="diri_lang">
              
              </div>

              <br> <br> <br>
                  <ul class="users-list clearfix">
                  @foreach ($all_teacher as $teacher)


                  	 <li class="col-md-2">
                    <a class="users-list-name" href="/profile/{{ $teacher->teacher_id }}">
                      <img class="force_resize" src="http://50.31.252.206/oos_franchise_semi/resources/images/photos/t_{{ $teacher->teacher_id }}.jpg" onError="this.onerror=null;this.src='http://50.31.252.206/oos_franchise_semi/resources/images/photos/default.png';" />
                     </a>
           
                      <a class="users-list-name" href="/profile/{{ $teacher->teacher_id }}">{{ $teacher->t_fname }} {{ $teacher->t_lname }}</a>
                      <span class="users-list-date">{{ $teacher->teacher_id }}</span>
                      @if ($teacher->status == 'RE')
              <span class="users-list-test" style="color:red;font-size:smaller">RESIGNED </span>
              @elseif ($teacher->status == 'TE')
                <span class="users-list-test" style="color:grey;font-size:smaller">TERMINATED </span>
              @else
              <span class="users-list-test" style="color:#3c8dbc;font-size:smaller">ACTIVE </span>
              @endif
                    </li>
                  @endforeach
                   
                  

                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
              </section>
              <script>

              	$(document).ready(function(){
              var numItems = $('.force_resize').length;
              $('.diri_count').html('No. of Teachers: '+ numItems);
              $('.tago').hide();
    $("#filter").keyup(function(){
 	$('.tago').show();
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $(".users-list li").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
 
        // Update the count
        var numberItems = count;
        if(count > 0) {
        $(".diri_lang").html('<span class="pull-right label tago label-success" style="margin-right:130px">No. of Teachers Found: '+count+'</span>');
        }
        else{
        	 $(".diri_lang").html('<span class="pull-right label tago label-danger" style="margin-right:130px">No Match Found</span>');
        }
    });
});
              </script>
@stop