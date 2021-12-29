<div>
    {{-- The whole world belongs to you. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <form id="contact" wire:submit.prevent="store">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <h2>Review</h2>
            </div>
            <div class="col-lg-4">
                <fieldset>
                    <input  type="text" wire:model="subject" placeholder="SUBJECT...*" required="">
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </fieldset>
            </div>

            <div class="col-lg-12">
                <fieldset>
                    <textarea wire:model="review" type="text" class="form-control"  placeholder="YOUR Review..." required=""></textarea>
                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </fieldset>

            </div>
            <div class="form-check form-check-inline">
                    <div class="col-lg-12">
                        @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                        <strong class="text-uppercase"> your rating: </strong>
                        <fieldset class="rating">
                            <input name="rating" type="radio" wire:model="rate" id="rating5" value="5">
                            <label for="rating5" title="5 stars">☆</label>

                            <input name="rating" type="radio" wire:model="rate" id="rating4" value="4">
                            <label for="rating4" title="4 stars">☆</label>

                            <input name="rating" type="radio" wire:model="rate" id="rating3" value="3">
                            <label for="rating3" title="3 stars">☆</label>

                            <input name="rating" type="radio" wire:model="rate" id="rating2" value="2">
                            <label for="rating2" title="2 stars">☆</label>

                            <input name="rating" type="radio" wire:model="rate" id="rating1" value="1">
                            <label for="rating1" title="1 stars">☆</label>
                        </fieldset>

                    </div>
            </div>



            <div class="col-lg-12">
                <fieldset>
                    @auth
                    <button type="submit" id="form-submit" class="button">SAVE</button>
                    @else
                    <button> <a style="color: white" href="/login">For submit review please login</a></button>
                    @endauth
                </fieldset>

            </div>
        </div>
    </form>

</div>
