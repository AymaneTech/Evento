<x-modals.modal name="user-delete" width="xl" title="Delete this user">
    <form action="{{route("profile.destroy", ["profile" => $user->id])}}" method="post">
        @method("delete")
        @csrf
        <div class="my-4 p-6">
            <input type="hidden" name="userType" value="{{ $userType }}">
            <x-text-input name="password" type="password" placeholder="Please to enter the current password"/>
            <button type="submit"
                    class="inline-block text-end px-8 py-2 my-4 ml-auto font-bold leading-normal text-white align-middle transition-all ease-in bg-black border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">
                Delete this Account
            </button>
        </div>
    </form>
</x-modals.modal>
