<div>
    <form wire:submit.prevent="login">
        <div class="input-group mb-3" style="direction: ltr !important;">
           <input  type="text" wire:model="username" class="form-control" placeholder="username">
           <div class="input-group-append">
              <div class="input-group-text">
                 <span class="fas fa-envelope"></span>
              </div>
           </div>
        </div>
        @error('username')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="input-group mb-3" style="direction: ltr !important;">
           <input type="password" wire:model="password" class="form-control" placeholder="Password">
           <div class="input-group-append">
              <div class="input-group-text">
                 <span class="fas fa-lock"></span>
              </div>
           </div>
        </div>
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="row">
            <div class="col-8" >
                <div class="icheck-primary">
                  <input type="checkbox" wire:model='remember' id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
           <!-- /.col -->
           <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">دخول </button>
           </div>
           <!-- /.col -->
        </div>
     </form>
    </div>
