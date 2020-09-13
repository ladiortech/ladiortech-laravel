@extends('admin.layout.admin')
@section('content')
<div class="wrapper wrapper-content animated fadeIn">
   <div class="p-w-md m-t-sm">
      <div class="row">
         <div class="col-sm-4">
            <h1 class="m-b-xs">
               26,900
            </h1>
            <small>
            Sales in current month
            </small>
            <div id="sparkline1" class="m-b-sm"></div>
            <div class="row">
               <div class="col-4">
                  <small class="stats-label">Pages / Visit</small>
                  <h4>236 321.80</h4>
               </div>
               <div class="col-4">
                  <small class="stats-label">% New Visits</small>
                  <h4>46.11%</h4>
               </div>
               <div class="col-4">
                  <small class="stats-label">Last week</small>
                  <h4>432.021</h4>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <h1 class="m-b-xs">
               98,100
            </h1>
            <small>
            Sales in last 24h
            </small>
            <div id="sparkline2" class="m-b-sm"></div>
            <div class="row">
               <div class="col-4">
                  <small class="stats-label">Pages / Visit</small>
                  <h4>166 781.80</h4>
               </div>
               <div class="col-4">
                  <small class="stats-label">% New Visits</small>
                  <h4>22.45%</h4>
               </div>
               <div class="col-4">
                  <small class="stats-label">Last week</small>
                  <h4>862.044</h4>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="row m-t-xs">
               <div class="col-6">
                  <h5 class="m-b-xs">Income last month</h5>
                  <h1 class="no-margins">160,000</h1>
                  <div class="font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
               </div>
               <div class="col-6">
                  <h5 class="m-b-xs">Sals current year</h5>
                  <h1 class="no-margins">42,120</h1>
                  <div class="font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
               </div>
            </div>
            <table class="table small m-t-sm">
               <tbody>
                  <tr>
                     <td>
                        <strong>142</strong> Projects
                     </td>
                     <td>
                        <strong>22</strong> Messages
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <strong>61</strong> Comments
                     </td>
                     <td>
                        <strong>54</strong> Articles
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <strong>154</strong> Companies
                     </td>
                     <td>
                        <strong>32</strong> Clients
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="small float-left col-md-3 m-l-lg m-t-md">
               <strong>Sales char</strong> have evolved over the years sometimes.
            </div>
            <div class="small float-right col-md-3 m-t-md text-right">
               <strong>There are many</strong> variations of passages of Lorem Ipsum available, but the majority have suffered.
            </div>
            <div class="flot-chart m-b-xl">
               <div class="flot-chart-content" id="flot-dashboard5-chart"></div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="ibox">
               <div class="ibox-content">
                  <div class="row">
                     <div class="col-sm-4">
                        <div class="form-group">
                           <label class="col-form-label" for="product_name">Project Name</label>
                           <input type="text" id="product_name" name="product_name" value="" placeholder="Project Name" class="form-control">
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="form-group">
                           <label class="col-form-label" for="price">Name</label>
                           <input type="text" id="price" name="price" value="" placeholder="Name" class="form-control">
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <div class="form-group">
                           <label class="col-form-label" for="quantity">Company</label>
                           <input type="text" id="quantity" name="quantity" value="" placeholder="Company" class="form-control">
                        </div>
                     </div>
                     <div class="col-sm-4">
                        <div class="form-group">
                           <label class="col-form-label" for="status">Status</label>
                           <select name="status" id="status" class="form-control">
                              <option value="1" selected="">Completed</option>
                              <option value="0">Pending</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-striped">
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Master project</td>
                              <td>Patrick Smith</td>
                              <td>$892,074</td>
                              <td>Inceptos Hymenaeos Ltd</td>
                              <td><strong>20%</strong></td>
                              <td>Jul 14, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>Alpha project</td>
                              <td>Alice Jackson</td>
                              <td>$963,486</td>
                              <td>Nec Euismod In Company</td>
                              <td><strong>40%</strong></td>
                              <td>Jul 16, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>3</td>
                              <td>Betha project</td>
                              <td>John Smith</td>
                              <td>$996,824</td>
                              <td>Erat Volutpat</td>
                              <td><strong>75%</strong></td>
                              <td>Jul 18, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>Gamma project</td>
                              <td>Anna Jordan</td>
                              <td>$105,192</td>
                              <td>Tellus Ltd</td>
                              <td><strong>18%</strong></td>
                              <td>Jul 22, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>Alpha project</td>
                              <td>Alice Jackson</td>
                              <td>$674,803</td>
                              <td>Nec Euismod In Company</td>
                              <td><strong>40%</strong></td>
                              <td>Jul 16, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Master project</td>
                              <td>Patrick Smith</td>
                              <td>$174,729</td>
                              <td>Inceptos Hymenaeos Ltd</td>
                              <td><strong>20%</strong></td>
                              <td>Jul 14, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>Gamma project</td>
                              <td>Anna Jordan</td>
                              <td>$823,198</td>
                              <td>Tellus Ltd</td>
                              <td><strong>18%</strong></td>
                              <td>Jul 22, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Project <small>This is example of project</small></td>
                              <td>Patrick Smith</td>
                              <td>$778,696</td>
                              <td>Inceptos Hymenaeos Ltd</td>
                              <td><strong>20%</strong></td>
                              <td>Jul 14, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>Alpha project</td>
                              <td>Alice Jackson</td>
                              <td>$861,063</td>
                              <td>Nec Euismod In Company</td>
                              <td><strong>40%</strong></td>
                              <td>Jul 16, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>3</td>
                              <td>Betha project</td>
                              <td>John Smith</td>
                              <td>$109,125</td>
                              <td>Erat Volutpat</td>
                              <td><strong>75%</strong></td>
                              <td>Jul 18, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>Gamma project</td>
                              <td>Anna Jordan</td>
                              <td>$600,978</td>
                              <td>Tellus Ltd</td>
                              <td><strong>18%</strong></td>
                              <td>Jul 22, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>Alpha project</td>
                              <td>Alice Jackson</td>
                              <td>$150,161</td>
                              <td>Nec Euismod In Company</td>
                              <td><strong>40%</strong></td>
                              <td>Jul 16, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>Project <small>This is example of project</small></td>
                              <td>Patrick Smith</td>
                              <td>$160,586</td>
                              <td>Inceptos Hymenaeos Ltd</td>
                              <td><strong>20%</strong></td>
                              <td>Jul 14, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>Gamma project</td>
                              <td>Anna Jordan</td>
                              <td>$110,612</td>
                              <td>Tellus Ltd</td>
                              <td><strong>18%</strong></td>
                              <td>Jul 22, 2015</td>
                              <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="footer">
   <div class="float-right">
      10GB of <strong>250GB</strong> Free.
   </div>
   <div>
      <strong>Copyright</strong> Example Company &copy; 2014-2018
   </div>
</div>
</div>
<div id="right-sidebar">
   <div class="sidebar-container">
      <ul class="nav nav-tabs navs-3">
         <li>
            <a class="nav-link active" data-toggle="tab" href="#tab-1"> Notes </a>
         </li>
         <li>
            <a class="nav-link" data-toggle="tab" href="#tab-2"> Projects </a>
         </li>
         <li>
            <a class="nav-link" data-toggle="tab" href="#tab-3"> <i class="fa fa-gear"></i> </a>
         </li>
      </ul>
      <div class="tab-content">
         <div id="tab-1" class="tab-pane active">
            <div class="sidebar-title">
               <h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
               <small><i class="fa fa-tim"></i> You have 10 new message.</small>
            </div>
            <div>
               <div class="sidebar-message">
                  <a href="#">
                     <div class="float-left text-center">
                        <img alt="image" class="rounded-circle message-avatar" src="{!! asset('admin/img/a1.jpg') !!}">
                        <div class="m-t-xs">
                           <i class="fa fa-star text-warning"></i>
                           <i class="fa fa-star text-warning"></i>
                        </div>
                     </div>
                     <div class="media-body">
                        There are many variations of passages of Lorem Ipsum available.
                        <br>
                        <small class="text-muted">Today 4:21 pm</small>
                     </div>
                  </a>
               </div>
               <div class="sidebar-message">
                  <a href="#">
                     <div class="float-left text-center">
                        <img alt="image" class="rounded-circle message-avatar" src="{!! asset('admin/img/a2.jpg') !!}">
                     </div>
                     <div class="media-body">
                        The point of using Lorem Ipsum is that it has a more-or-less normal.
                        <br>
                        <small class="text-muted">Yesterday 2:45 pm</small>
                     </div>
                  </a>
               </div>
               <div class="sidebar-message">
                  <a href="#">
                     <div class="float-left text-center">
                        <img alt="image" class="rounded-circle message-avatar" src="{!! asset('admin/img/a3.jpg') !!}">
                        <div class="m-t-xs">
                           <i class="fa fa-star text-warning"></i>
                           <i class="fa fa-star text-warning"></i>
                           <i class="fa fa-star text-warning"></i>
                        </div>
                     </div>
                     <div class="media-body">
                        Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        <br>
                        <small class="text-muted">Yesterday 1:10 pm</small>
                     </div>
                  </a>
               </div>
               <div class="sidebar-message">
                  <a href="#">
                     <div class="float-left text-center">
                        <img alt="image" class="rounded-circle message-avatar" src="{!! asset('admin/img/a4.jpg') !!}">
                     </div>
                     <div class="media-body">
                        Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                        <br>
                        <small class="text-muted">Monday 8:37 pm</small>
                     </div>
                  </a>
               </div>
               <div class="sidebar-message">
                  <a href="#">
                     <div class="float-left text-center">
                        <img alt="image" class="rounded-circle message-avatar" src="{!! asset('admin/img/a8.jpg') !!}">
                     </div>
                     <div class="media-body">
                        All the Lorem Ipsum generators on the Internet tend to repeat.
                        <br>
                        <small class="text-muted">Today 4:21 pm</small>
                     </div>
                  </a>
               </div>
               <div class="sidebar-message">
                  <a href="#">
                     <div class="float-left text-center">
                        <img alt="image" class="rounded-circle message-avatar" src="{!! asset('admin/img/a7.jpg') !!}">
                     </div>
                     <div class="media-body">
                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br>
                        <small class="text-muted">Yesterday 2:45 pm</small>
                     </div>
                  </a>
               </div>
               <div class="sidebar-message">
                  <a href="#">
                     <div class="float-left text-center">
                        <img alt="image" class="rounded-circle message-avatar" src="{!! asset('admin/img/a3.jpg') !!}">
                        <div class="m-t-xs">
                           <i class="fa fa-star text-warning"></i>
                           <i class="fa fa-star text-warning"></i>
                           <i class="fa fa-star text-warning"></i>
                        </div>
                     </div>
                     <div class="media-body">
                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
                        <br>
                        <small class="text-muted">Yesterday 1:10 pm</small>
                     </div>
                  </a>
               </div>
               <div class="sidebar-message">
                  <a href="#">
                     <div class="float-left text-center">
                        <img alt="image" class="rounded-circle message-avatar" src="{!! asset('admin/img/a4.jpg') !!}">
                     </div>
                     <div class="media-body">
                        Uncover many web sites still in their infancy. Various versions have.
                        <br>
                        <small class="text-muted">Monday 8:37 pm</small>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div id="tab-2" class="tab-pane">
            <div class="sidebar-title">
               <h3> <i class="fa fa-cube"></i> Latest projects</h3>
               <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
            </div>
            <ul class="sidebar-list">
               <li>
                  <a href="#">
                     <div class="small float-right m-t-xs">9 hours ago</div>
                     <h4>Business valuation</h4>
                     It is a long established fact that a reader will be distracted.
                     <div class="small">Completion with: 22%</div>
                     <div class="progress progress-mini">
                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                     </div>
                     <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="small float-right m-t-xs">9 hours ago</div>
                     <h4>Contract with Company </h4>
                     Many desktop publishing packages and web page editors.
                     <div class="small">Completion with: 48%</div>
                     <div class="progress progress-mini">
                        <div style="width: 48%;" class="progress-bar"></div>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="small float-right m-t-xs">9 hours ago</div>
                     <h4>Meeting</h4>
                     By the readable content of a page when looking at its layout.
                     <div class="small">Completion with: 14%</div>
                     <div class="progress progress-mini">
                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <span class="label label-primary float-right">NEW</span>
                     <h4>The generated</h4>
                     <!--<div class="small float-right m-t-xs">9 hours ago</div>-->
                     There are many variations of passages of Lorem Ipsum available.
                     <div class="small">Completion with: 22%</div>
                     <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="small float-right m-t-xs">9 hours ago</div>
                     <h4>Business valuation</h4>
                     It is a long established fact that a reader will be distracted.
                     <div class="small">Completion with: 22%</div>
                     <div class="progress progress-mini">
                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                     </div>
                     <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="small float-right m-t-xs">9 hours ago</div>
                     <h4>Contract with Company </h4>
                     Many desktop publishing packages and web page editors.
                     <div class="small">Completion with: 48%</div>
                     <div class="progress progress-mini">
                        <div style="width: 48%;" class="progress-bar"></div>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="small float-right m-t-xs">9 hours ago</div>
                     <h4>Meeting</h4>
                     By the readable content of a page when looking at its layout.
                     <div class="small">Completion with: 14%</div>
                     <div class="progress progress-mini">
                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <span class="label label-primary float-right">NEW</span>
                     <h4>The generated</h4>
                     <!--<div class="small float-right m-t-xs">9 hours ago</div>-->
                     There are many variations of passages of Lorem Ipsum available.
                     <div class="small">Completion with: 22%</div>
                     <div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
                  </a>
               </li>
            </ul>
         </div>
         <div id="tab-3" class="tab-pane">
            <div class="sidebar-title">
               <h3><i class="fa fa-gears"></i> Settings</h3>
               <small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
            </div>
            <div class="setings-item">
               <span>
               Show notifications
               </span>
               <div class="switch">
                  <div class="onoffswitch">
                     <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                     <label class="onoffswitch-label" for="example">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="setings-item">
               <span>
               Disable Chat
               </span>
               <div class="switch">
                  <div class="onoffswitch">
                     <input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
                     <label class="onoffswitch-label" for="example2">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="setings-item">
               <span>
               Enable history
               </span>
               <div class="switch">
                  <div class="onoffswitch">
                     <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                     <label class="onoffswitch-label" for="example3">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="setings-item">
               <span>
               Show charts
               </span>
               <div class="switch">
                  <div class="onoffswitch">
                     <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                     <label class="onoffswitch-label" for="example4">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="setings-item">
               <span>
               Offline users
               </span>
               <div class="switch">
                  <div class="onoffswitch">
                     <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
                     <label class="onoffswitch-label" for="example5">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="setings-item">
               <span>
               Global search
               </span>
               <div class="switch">
                  <div class="onoffswitch">
                     <input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
                     <label class="onoffswitch-label" for="example6">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="setings-item">
               <span>
               Update everyday
               </span>
               <div class="switch">
                  <div class="onoffswitch">
                     <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                     <label class="onoffswitch-label" for="example7">
                     <span class="onoffswitch-inner"></span>
                     <span class="onoffswitch-switch"></span>
                     </label>
                  </div>
               </div>
            </div>
            <div class="sidebar-content">
               <h4>Settings</h4>
               <div class="small">
                  I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                  Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection