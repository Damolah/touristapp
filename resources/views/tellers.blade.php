

@include('layouts.header')

<div class="content">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Your Stories
                            <span class="pull-right">
                                <button type="button" rel="tooltip" title="Create Story" class="btn btn-white btn-link btn-sm pull-right">
                                    <i class="material-icons">add</i>
                                </button>
                            </span>
                        </h4>

                    </div>
                    
                    <div class="card-body table-responsive">
                        <div id="msg"></div>
                        <table class="table table-hover">
                            <thead class="text-primary">
                            <th>Select</th>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Date Created</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @foreach ($allStory as $story)
                                <tr id="sid{{$story->id}}">
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>{{ $story->title }}</td>
                                    <td>{{ $story->genre }}</td>
                                    <td>{{ Carbon\Carbon::parse($story->DateCreated)->format('Y-m-d') }}</td>
                                    <td class="td-actions text-right">
                                        {{-- <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button> --}}
                                        <button type="button" rel="tooltip" onclick="deleteStory( '{{route('story_destroy', $story->id)}}', '{{($story->id)}}')" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>


            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Story</h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('tell_story') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Title</label>
                                        <input name="title" id="title" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Genre</label>
                                        <select name="genre" id="genre" class="form-control">
                                            <option value="">Select Genre</option>
                                            <option value="Technology">Technology</option>
                                            <option value="Romance">Romance</option>
                                            <option value="History">History</option>
                                            <option value="Comedy">Comedy</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Content</label>
                                        <textarea name="story" id="story" rows="5" class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary pull-right">Create/Update</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteStory(baseURL, id){
            if(id< 1 ){
                return;
            }
            if (confirm("Are you sure to delete this Story?")) {
        
        
                let xhr = new XMLHttpRequest();
                let url = baseURL;
                xhr.open('Delete', url, false);
                xhr.setRequestHeader("content-type", "application/json");
                xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
                xhr.setRequestHeader("X-CSRF-Token", "{{ csrf_token() }}");
                try {
                    xhr.send();
                    if (xhr.status != 200) {
                        /* alert('Something went wrong try again!');*/
                    } else {
                        var res = JSON.parse(xhr.responseText);
                        if(res.success){
                            $('#msg').html(messsage(res.message));
                            $('#sid' + id).remove();
                        }
                    }
                } catch (err) { // instead of onerror
                    //alert("Request failed");
                }
            }
        }
        function messsage (msg){
            return `<div class="alert alert-success" role="alert">
                    ${msg}
                    </div>`;
        }
    </script>
    <footer class="">
        <div class="container">
            @include('layouts.footer')
        </div>
    </footer>
</div>
