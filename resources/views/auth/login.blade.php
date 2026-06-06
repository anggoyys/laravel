<x-auth-layout>
    <form action="/login" method="POST">
        @csrf
         <div class="form-group">
            <input type="text" name="name" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="name" placeholder="Password" class="form-control">
        </div>
        <button type="submit">Login</button>
    </form>
</x-auth-layout>