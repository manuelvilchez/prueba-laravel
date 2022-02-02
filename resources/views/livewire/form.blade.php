<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" wire:model='name'>
    @error('name') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>UserName</label>
    <input type="text" class="form-control" wire:model='username'>
    @error('username') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" wire:model='email'>
    @error('email') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Street</label>
    <input type="text" class="form-control" wire:model='street'>
    @error('street') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Suite</label>
    <input type="text" class="form-control" wire:model='suite'>
    @error('suite') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>City</label>
    <input type="text" class="form-control" wire:model='city'>
    @error('city') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Zipcode</label>
    <input type="text" class="form-control" wire:model='zipcode'>
    @error('zipcode') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Lat</label>
    <input type="text" class="form-control" wire:model='lat'>
    @error('lat') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Lang</label>
    <input type="text" class="form-control" wire:model='lng'>
    @error('lng') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>phone</label>
    <input type="text" class="form-control" wire:model='phone'>
    @error('phone') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Website</label>
    <input type="text" class="form-control" wire:model='website'>
    @error('website') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Company Name</label>
    <input type="text" class="form-control" wire:model='company_name'>
    @error('company_name') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>company_catchPhrase</label>
    <input type="text" class="form-control" wire:model='company_catchPhrase'>
    @error('company_catchPhrase') <span>{{ $message }}</span> @enderror
</div>

<div class="form-group">
    <label>Bs</label>
    <input type="text" class="form-control" wire:model='bs'>
    @error('bs') <span>{{ $message }}</span> @enderror
</div>

