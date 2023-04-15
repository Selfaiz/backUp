@extends('layouts.master')
@section('title','register ouvrier')
@section('style')
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('assets/css/ouvrier/style.css') }}">
@endsection
@section('content')
<section class="ouvrier-register">
    <img src="{{ asset('assets/img/auth/background.jpg') }}" alt="background" />
    <div class="register-container">
        <div class="register-header">
            <header>worker register</header>
            <div class="register-img">
                <div class="profile-imd">
                    <img class="avatar-image" src="{{ asset('assets/img/ouvrier/avatar.png') }}" alt="avatar" />
                </div>
                <i class="uil uil-edit edit-profile"></i>
                <input type="file" hidden name="profile_image" />
            </div>
        </div>
        @if ($errors->any())
            <span style="color: red">{{ $errors->first() }}</span>
        @endif
        <form action="{{ route('ouvrier.store') }}" method="POST">
            @csrf
            <!-- ================First Form================ -->
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>
                    <div class="fields">

                        <div class="input-field">
                            <label for="">Nom</label>
                            <input type="text" name="nom" value="{{ old('nom') }}" class="@error('nom') required @enderror" placeholder="Enter first name" required />
                        </div>

                        <div class="input-field">
                            <label for="">Prenom</label>
                            <input type="text" name="prenom" value="{{old('prenom')}}" class="@error('prenom') required @enderror" placeholder="Enter last name" required />
                        </div>

                        <div class="input-field">
                            <label for="">Sexe</label>
                            <select name="sexe">
                                <option value="Male">Male</option>
                                <option value="Famele">Famele</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="">Email</label>
                            <input name="email" type="email" value="{{old('email')}}" class="@error('email') required @enderror" placeholder="Enter your email" required />
                        </div>

                        <div class="input-field">
                            <label for="">Password</label>
                            <input name="password" type="password" class="@error('password') required @enderror" placeholder="Enter new password" required />
                        </div>

                        <div class="input-field">
                            <label for="">confirmation password</label>
                            <input name="password_confirmation" class="@error('password') required @enderror" type="password" placeholder="Confirme your password" required />
                        </div>

                    </div>
                </div>
                <div class="details ID">

                    <span class="title">Identify Details</span>
                    <div class="fields">

                        <div class="input-field">
                            <label for="">ville</label>
                            <select class="@error('ville') required @enderror" name="ville">
                                <option hidden>Select city</option>
                                @foreach ($cities as $city)
                                    <option {{ $city == old('ville')? 'selected' : '' }} value="{{ $city }}"> {{ $city }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="">Address</label>
                            <input name="address" type="text" value="{{old('address')}}" class="@error('address') required @enderror" placeholder="Enter your CIN" required />
                        </div>

                        <div class="input-field">
                            <label for="">Date de Naissance</label>
                            <input name="naissance" type="date" value="{{old('date') ? date('Y-m-d', strtotime(old('date'))) : ''}}" class="@error('naissance') required @enderror" placeholder="Enter your Birth date" required />
                        </div>

                        <div class="input-field">
                            <label for="">Telephone</label>
                            <input name="phone" type="text" value="{{ old('phone') }}" class="@error('phone') required @enderror" placeholder="Enter your number" required />
                        </div>
                    </div>

                    <button type="button" class="nextBtn">
                        <span class="btnText">Suivant</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
            <!-- ================Second Form================ -->
            <div class="form second">
                <div class="details personal">
                    <span class="title">Work Details</span>
                    <div class="fields">

                        <div class="input-field">
                            <label for="cin">CIN</label>
                            <input id="cin" name="cin" value="{{ old('cin') }}" type="text" class="@error('cin') required @enderror" placeholder="Enter your CIN">
                        </div>

                        <div class="input-field">
                            <label for="categorie_id">Categorie</label>
                            <select id="categorie_id" name="categorie_id" class="@error('categorie_id') required @enderror" name="categorie_id ">
                                <option hidden>Select categorie</option>
                                @foreach ($categories as $categorie)
                                    <option {{ old('categorie_id') == $categorie->id ? 'selected' : '' }} value="{{ $categorie->id }}" > {{ $categorie->nom_categorie }} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-field">
                            <label for="experience">Experience</label>
                            <select id="experience" name="experience" class="@error('experience') required @enderror">
                                <option hidden>Select experience</option>
                                <option>1 ans</option>
                                <option>3 ans</option>
                                <option>5 ans</option>
                                <option>+10 ans </option>
                            </select>
                        </div>

                        <div class="input-field textarea @error('bio') required @enderror   ">
                            <label for="">Bio</label>
                            <textarea cols="30" rows="10" placeholder="Enter your description" name="bio">{{old('bio')}}</textarea>
                        </div>

                    </div>
                </div>
                <div class="details ID">

                    <span class="title">Necessary documents</span>
                    <div class="fields">

                        <div class="input-field">
                            <label for="">document 1</label>
                            <input type="text" placeholder="Enter your CIN"  />
                        </div>

                        <div class="input-field">
                            <label for="">Document 2</label>
                            <input type="text" placeholder="Enter last name"  />
                        </div>

                        <div class="input-field">
                            <label for="">Document 3</label>
                            <input type="text" placeholder="Enter last name"  />
                        </div>

                        

                        <div class="input-field">
                            <label for="">Document 1</label>
                            <input type="text" placeholder="Enter your CIN"  />
                        </div>

                        <div class="input-field">
                            <label for="">Document 2</label>
                            <input type="text" placeholder="Enter last name"  />
                        </div>

                        <div class="input-field">
                            <label for="">Document 3</label>
                            <input type="text" placeholder="Enter your Birth date"  />
                        </div>

                    </div>
                    
                    <div class="accept">
                        <input name="check" type="checkbox" id="accept" />
                        <label for="accept" class="terms">By checking the checkbox below, you agree to <span>our Terms of Use</span>, <span>Privacy Statement</span>, and that you are over 18.</label>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        <button class="nextBtn">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
    @endsection
@section('script')
    <script defer src="{{ asset('assets/js/main.js') }}"></script>
@endsection
