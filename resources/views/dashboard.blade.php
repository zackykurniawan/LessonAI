@extends('layouts.template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Pengguna</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Siswa</h4>
                            </div>
                            <div class="card-body">
                                42
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Jurusan</h4>
                            </div>
                            <div class="card-body">
                                1,201
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Artikel</h4>
                            </div>
                            <div class="card-body">
                                47
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Statistics</h4>
                            <div class="card-header-action">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary">Week</a>
                                    <a href="#" class="btn">Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                                class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas id="myChart" style="display: block; width: 446px; height: 270px;"
                                class="chartjs-render-monitor" width="446" height="270"></canvas>
                            <div class="statistic-details mt-sm-4">
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span> 7%</span>
                                    <div class="detail-value">$243</div>
                                    <div class="detail-name">Today's Sales</div>
                                </div>
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-danger"><i
                                                class="fas fa-caret-down"></i></span> 23%</span>
                                    <div class="detail-value">$2,902</div>
                                    <div class="detail-name">This Week's Sales</div>
                                </div>
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span>9%</span>
                                    <div class="detail-value">$12,821</div>
                                    <div class="detail-name">This Month's Sales</div>
                                </div>
                                <div class="statistic-details-item">
                                    <span class="text-muted"><span class="text-primary"><i
                                                class="fas fa-caret-up"></i></span> 19%</span>
                                    <div class="detail-value">$92,142</div>
                                    <div class="detail-name">This Year's Sales</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Recent Activities</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar-1.png" alt="avatar"
                                        width="50">
                                    <div class="media-body">
                                        <div class="float-right text-primary">Now</div>
                                        <div class="media-title">Farhan A Mujib</div>
                                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla.
                                            Nulla vel metus scelerisque ante sollicitudin.</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar-2.png" alt="avatar"
                                        width="50">
                                    <div class="media-body">
                                        <div class="float-right">12m</div>
                                        <div class="media-title">Ujang Maman</div>
                                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla.
                                            Nulla vel metus scelerisque ante sollicitudin.</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar-3.png" alt="avatar"
                                        width="50">
                                    <div class="media-body">
                                        <div class="float-right">17m</div>
                                        <div class="media-title">Rizal Fakhri</div>
                                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla.
                                            Nulla vel metus scelerisque ante sollicitudin.</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar-4.png" alt="avatar"
                                        width="50">
                                    <div class="media-body">
                                        <div class="float-right">21m</div>
                                        <div class="media-title">Alfa Zulkarnain</div>
                                        <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla.
                                            Nulla vel metus scelerisque ante sollicitudin.</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center pt-1 pb-1">
                                <a href="#" class="btn btn-primary btn-lg btn-round">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-12 col-12 col-sm-12">
                    <form method="post" class="needs-validation" novalidate="">
                        <div class="card">
                            <div class="card-header">
                                <h4>Quick Draft</h4>
                            </div>
                            <div class="card-body pb-0">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" required="">
                                    <div class="invalid-feedback">
                                        Please fill in the title
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea class="summernote-simple" style="display: none;"></textarea>
                                    <div class="note-editor note-frame card">
                                        <div class="note-dropzone">
                                            <div class="note-dropzone-message"></div>
                                        </div>
                                        <div class="note-toolbar-wrapper" style="height: 72px;">
                                            <div class="note-toolbar card-header"
                                                style="position: relative; top: 0px; width: 100%;">
                                                <div class="note-btn-group btn-group note-style"><button type="button"
                                                        class="note-btn btn btn-light btn-sm note-btn-bold"
                                                        tabindex="-1" title=""
                                                        data-original-title="Bold (CTRL+B)"><i
                                                            class="note-icon-bold"></i></button><button type="button"
                                                        class="note-btn btn btn-light btn-sm note-btn-italic"
                                                        tabindex="-1" title=""
                                                        data-original-title="Italic (CTRL+I)"><i
                                                            class="note-icon-italic"></i></button><button type="button"
                                                        class="note-btn btn btn-light btn-sm note-btn-underline"
                                                        tabindex="-1" title=""
                                                        data-original-title="Underline (CTRL+U)"><i
                                                            class="note-icon-underline"></i></button><button
                                                        type="button" class="note-btn btn btn-light btn-sm"
                                                        tabindex="-1" title=""
                                                        data-original-title="Remove Font Style (CTRL+\)"><i
                                                            class="note-icon-eraser"></i></button></div>
                                                <div class="note-btn-group btn-group note-font"><button type="button"
                                                        class="note-btn btn btn-light btn-sm note-btn-strikethrough"
                                                        tabindex="-1" title=""
                                                        data-original-title="Strikethrough (CTRL+SHIFT+S)"><i
                                                            class="note-icon-strikethrough"></i></button></div>
                                                <div class="note-btn-group btn-group note-para">
                                                    <div class="note-btn-group btn-group"><button type="button"
                                                            class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                            tabindex="-1" data-toggle="dropdown" title=""
                                                            data-original-title="Paragraph"><i
                                                                class="note-icon-align-left"></i></button>
                                                        <div class="dropdown-menu">
                                                            <div class="note-btn-group btn-group note-align"><button
                                                                    type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title=""
                                                                    data-original-title="Align left (CTRL+SHIFT+L)"><i
                                                                        class="note-icon-align-left"></i></button><button
                                                                    type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title=""
                                                                    data-original-title="Align center (CTRL+SHIFT+E)"><i
                                                                        class="note-icon-align-center"></i></button><button
                                                                    type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title=""
                                                                    data-original-title="Align right (CTRL+SHIFT+R)"><i
                                                                        class="note-icon-align-right"></i></button><button
                                                                    type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title=""
                                                                    data-original-title="Justify full (CTRL+SHIFT+J)"><i
                                                                        class="note-icon-align-justify"></i></button>
                                                            </div>
                                                            <div class="note-btn-group btn-group note-list"><button
                                                                    type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title=""
                                                                    data-original-title="Outdent (CTRL+[)"><i
                                                                        class="note-icon-align-outdent"></i></button><button
                                                                    type="button" class="note-btn btn btn-light btn-sm"
                                                                    tabindex="-1" title=""
                                                                    data-original-title="Indent (CTRL+])"><i
                                                                        class="note-icon-align-indent"></i></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="note-editing-area">
                                            <div class="note-handle">
                                                <div class="note-control-selection">
                                                    <div class="note-control-selection-bg"></div>
                                                    <div class="note-control-holder note-control-nw"></div>
                                                    <div class="note-control-holder note-control-ne"></div>
                                                    <div class="note-control-holder note-control-sw"></div>
                                                    <div class="note-control-sizing note-control-se"></div>
                                                    <div class="note-control-selection-info"></div>
                                                </div>
                                            </div>
                                            <textarea class="note-codable"></textarea>
                                            <div class="note-editable card-block" style="min-height: 150px;"
                                                contenteditable="true">
                                                <p><br></p>
                                            </div>
                                        </div>
                                        <div class="note-statusbar">
                                            <div class="note-resizebar">
                                                <div class="note-icon-bar"></div>
                                                <div class="note-icon-bar"></div>
                                                <div class="note-icon-bar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer pt-0">
                                <button class="btn btn-primary">Save Draft</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Posts</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Introduction Laravel 5
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="font-weight-600"><img
                                                        src="assets/img/avatar/avatar-1.png" alt="avatar"
                                                        class="rounded-circle mr-1" width="30"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="" data-original-title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action trigger--fire-modal-1"
                                                    data-toggle="tooltip" title=""
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - Installation
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="font-weight-600"><img
                                                        src="assets/img/avatar/avatar-1.png" alt="avatar"
                                                        class="rounded-circle mr-1" width="30"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="" data-original-title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action trigger--fire-modal-2"
                                                    data-toggle="tooltip" title=""
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - MVC
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="font-weight-600"><img
                                                        src="assets/img/avatar/avatar-1.png" alt="avatar"
                                                        class="rounded-circle mr-1" width="30"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="" data-original-title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action trigger--fire-modal-3"
                                                    data-toggle="tooltip" title=""
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - Migration
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="font-weight-600"><img
                                                        src="assets/img/avatar/avatar-1.png" alt="avatar"
                                                        class="rounded-circle mr-1" width="30"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="" data-original-title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action trigger--fire-modal-4"
                                                    data-toggle="tooltip" title=""
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - Deploy
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="font-weight-600"><img
                                                        src="assets/img/avatar/avatar-1.png" alt="avatar"
                                                        class="rounded-circle mr-1" width="30"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="" data-original-title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action trigger--fire-modal-5"
                                                    data-toggle="tooltip" title=""
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Laravel 5 Tutorial - Closing
                                                <div class="table-links">
                                                    in <a href="#">Web Development</a>
                                                    <div class="bullet"></div>
                                                    <a href="#">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="font-weight-600"><img
                                                        src="assets/img/avatar/avatar-1.png" alt="avatar"
                                                        class="rounded-circle mr-1" width="30"> Bagus Dwi Cahya</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="" data-original-title="Edit"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger btn-action trigger--fire-modal-6"
                                                    data-toggle="tooltip" title=""
                                                    data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                    data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
