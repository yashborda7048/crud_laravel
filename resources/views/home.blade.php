<x-header componentsName='- Home' />
<div id="main-content">
    @if ($message = Session::get('success'))
        <h3 class="success-message">{{ $message }}</h3>
    @endif
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
            <th>No.</th>
            <th>Image</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td style='text-align: center;'>[ {{ $loop->index + 1 }} ]</td>
                    <td>
                        @if ($student->img)
                            <img width="70px" height="70px" src="assets/img/{{ $student->img }}"
                                alt="{{ $student->img }}">
                        @else
                            {{ substr($student->name, 0, 1) }}
                        @endif
                    </td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a href='{{ Route('edit', ['id' => $student->id]) }}'>Edit</a>
                        <form style="display: inline-flex" method="POST" action="delete/{{ $student->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="deletebtn">Delete</button>
                        </form>
                        {{-- <button onclick="document.getElementById('id01').style.display='block'">Delete</button> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $students->links() }}

    {{-- <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>
        <form class="modal-content" action="/action_page.php">
            <div class="container">
                <h1>Delete Your User Account</h1>
                <p>Are you sure you want to delete your account?</p>

                <div class="clearfix">
                    <button onclick="document.getElementById('id01').style.display='none'" type="button"
                        class="cancelbtn">Cancel</button>
                    <a href="delete/{{ $student->id }}" class="deletebtn"> Delete</a>
                </div>
            </div>
        </form>
    </div> --}}
</div>
<x-footer />
