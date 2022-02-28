<form action="{{route('customer.create')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="phone" placeholder="Phone">
    <input type="text" name="address" placeholder="Address">
    <button>Create</button>
</form>
