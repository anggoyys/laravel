<x-auth-layout>
    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Name" class="form-control">
        </div>
         <div class="form-group">
            <input type="text" name="name" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="name" placeholder="Password" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="name" placeholder="Password Confirmation" class="form-control">
        </div>
        <button type="submit">Register</button>
    </form>
</x-auth-layout>