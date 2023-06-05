<x-header componentsName='- Home' />
<div id="main-content">
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
                        <img width="70px" height="70px" src="assets/img/{{ $student->img }}" alt="{{ $student->img }}">
                    </td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a href='{{ Route('edit', ['id' => $student->id]) }}'>Edit</a>
                        <a href="assets/components/delete-inline.php?id=">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<x-footer />
