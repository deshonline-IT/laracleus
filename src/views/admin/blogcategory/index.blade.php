@extends('nuclues::backend.layouts.app')
@section('title','blogcategory')

@push('css')
<style>
  .pagination {
    position: absolute;
    top: -25px;
    right: 4px;
}
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    border-color: rgba(0,0,0,0);
    background: rgba(0,0,0,0) linear-gradient(45deg, #6878E2, #7356B2);
}
</style>
@endpush
@section('content')
     <div class="panel-body">
              
      <div class="content-area">
        <div class="sub-bar">
          <div class="sub-title">
            <h4>Dashboard:</h4>
            <span>Welcome To blogcategory</span>
          </div>
          <ul class="bread-crumb">
            <li><a href="#" title="">Dashboard</a></li>
            <li>blogcategory</li>
          </ul>
        </div>
        <div class="gap inner-bg">
          <div class="element-title">
            <h4>blogcategory</h4>
            <span>It's your blogcategory list </span> 
            <div class="pull-right">
           <a href="{{ route('blogcategory.create') }}" class="btn-st org-clr">Add new</i></a>
          </div> 
          </div>
          
          <div class="table-styles">
            <div class="widget">
              <table class="prj-tbl striped table-responsive">
                <thead class="color">
                  <tr>
                    <th><em>ID</em></th>
                    <th><em>Name</em></th>
                    <th><em>Slug</em></th>
                    <th><em>Created At</em></th>
                    <th><em>Updated At</em></th>
                    <th><em>Action</em></th>
                  </tr>
                </thead>
                <tbody>
                    @if($blogcategories->count() > 0)
                    @foreach($blogcategories as $key=>$blogcategory)
                      <tr>
                        <td><span>{{ $key + 1 }}</span></td>
                        <td><i>{{ $blogcategory->name }}</i></td>
                        <td><span>{{ $blogcategory->slug }}</span></td>
                        <td><i>{{ $blogcategory->created_at }}</i></td>
                        <td><i>{{ $blogcategory->updated_at }}</i></td>
                        <td><i>
                         
                            <a href="{{ route('blogcategory.edit',$blogcategory->slug) }}" class="btn-st blu-clr"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('admin.blogcategory.destroy',$blogcategory->slug) }}" class="btn-st rd-clr"><i class="fa fa-trash"></i></a>
                        </i></td>

                      </tr>
                  @endforeach
                    <div class="pagination">
                      {!! $blogcategories->links() !!}
                    </div>
                  @else
                  <tbody>
                      <tr>
                          
                      </tr>
                  </tbody>
                  @endif
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>
      <div class="bottombar"> 
                            <span>© 2019. Dewwater. All Rights Reserved.</span>
                        </div>
      <!-- bottombar --> 
    </div>
@endsection