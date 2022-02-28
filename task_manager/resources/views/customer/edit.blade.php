<form action="{{route('customer.update',$customer->id)}}" method="post">
    @csrf
    <input type="text" name="name" value="{{$customer->name}}">
    <input type="text" name="email" value="{{$customer->email}}">
    <input type="text" name="phone" value="{{$customer->phone}}">
    <input type="text" name="address" value="{{$customer->address}}">
    <button>Update</button>
</form>
