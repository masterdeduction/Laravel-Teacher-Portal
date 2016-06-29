@extends('layouts.main')

@section('content')

    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">
        <?php

$profile = Auth::user()->teacher;

switch ($profile->gender) {
  case 'M':
     $color = 'aqua';
     $nav_color = '#00c0ef';
      break;
  case 'F':
     $color = 'maroon';
     $nav_color = 'pink';
     break;

  default:
   $color = 'aqua';
    $nav_color = '#00c0ef';

    break;
}

    ?>
<style>
  hr {
   margin-bottom: 2px;
   margin-top: 2px;
  }
  .way_cursor {
    pointer-events: none;
  }
  .nav-tabs-custom>.nav-tabs>li.active {
    border-top-color: {{ $nav_color }};
}
</style>

          <!-- /.box -->


<div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-{{ $color }}">
              <div class="widget-user-image">
                <img class="img-circle" src="{{ profile_avatar(Auth::user()->teacher_id) }}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">{{ $profile->t_fname.' '.$profile->t_lname }}</h3>
              <br>
              <h5 class="widget-user-desc ">@if ($profile->status == 'RE')
               RESIGNED
              @elseif ($profile->status == 'TE')
                TERMINATED
              @else
              ACTIVE
              @endif</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href="#"><strong>Gender:</strong> <span class="pull-right badge bg-{{ $color }}">   @if ($profile->gender == 'M')
               {{ 'Male' }}
              @else
              {{ 'Female' }}
             @endif</span></a></li>
                <li><a href="#" class="way_cursor"><strong>Date of Birth:</strong> <span class="pull-right badge bg-{{ $color }}">{{ $profile->dob->format('F j, Y') }}</span></a></li>
                <li><a href="#" class="way_cursor"><strong>Nationality:</strong> <span class="pull-right badge bg-{{ $color }}"> @if ($profile->teacher_type == 'FT')
              Foreign
              @else 
              Vietnamese
            @endif</span></a></li>
                <li><a href="#" class="way_cursor"><strong>Passport Number:</strong> <span class="pull-right badge bg-{{ $color }}"></span></a></li>
                  <li><a href="#" class="way_cursor"><strong>Date Issued:</strong> <span class="pull-right badge bg-{{ $color }}"></span></a></li>
                <li><a href="#" class="way_cursor"><strong>Place Issued:</strong> <span class="pull-right badge bg-{{ $color }}"></span></a></li>
                <li><a href="#" class="way_cursor"><strong>Visa Expiry Date:</strong> <span class="pull-right badge bg-{{ $color }}">{{ $profile->visa_expiry->format('F j, Y') }}</span></a></li>
                <li><a href="#" class="way_cursor"><strong>Address in Vietnam:</strong> <span class="pull-right badge bg-{{ $color }}">{{ $profile->address }}</span></a></li>
                 <li><a href="#" class="way_cursor"><strong>Mobile Phone:</strong> <span class="pull-right badge bg-{{ $color }}">{{ $profile->contact1 }}</span></a></li>
                <li><a href="#" class="way_cursor"><strong>Email:</strong> <span class="pull-right badge bg-{{ $color }}">{{ $profile->email }}</span></a></li><br>
              </ul>
            </div>
          </div>
          <!-- About Me Box -->
         
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
            <li  class="active"><a href="#timeline" data-toggle="tab">Educational Background</a></li>
              <li><a href="#activity" data-toggle="tab">Working Experience</a></li>
              <li><a href="#settings" data-toggle="tab">Study Related Works and Activities</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="activity">
              <div class="box-body chat" id="chat-box" style="overflow: hidden; width: auto;">
              <!-- chat item -->
              <div class="item"><br><br>
                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"></small>
                    2016
                  </a>
                
                </p>
                <div class="attachment">
                 Test
                </div>
                <!-- /.attachment -->
              </div>
                <div class="item"><br><br>
                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> </small>
                    2016
                  </a>
                
                </p>
                <div class="attachment">
                 Test
                </div>
                <!-- /.attachment -->
              </div>

              <!-- /.item -->
              <!-- chat item -->
   
              <!-- /.item -->
             
            </div>
              </div>
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
@stop
