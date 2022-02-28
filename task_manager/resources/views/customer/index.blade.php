<a href="{{route('customer.create')}}">Create</a>
<table border="1" style="border-collapse: collapse">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>phone</th>
        <th>address</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $key => $customer)
        <tr>
            <td>{{$key +1}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->address}}</td>
            <td>
                <a href="{{route('customer.detail',$customer->id)}}">Detail</a>
                <a href="{{route('customer.edit',$customer->id)}}">Edit</a>
                <a onclick="return confirm('Are you sure?')" href="{{route('customer.delete',$customer->id)}}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
