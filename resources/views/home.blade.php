<x-header componentsName='- Home' />
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
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
                    <td>{{ $loop->index }}</td>
                    <td>{{ $student->name}}</td>
                    <td>{{}}</td>
                    <td>{{}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<x-footer />
