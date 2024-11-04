<h2>Modifier un Adhérent</h2>
<form action="{{ route('adherent.update', ['id' => $adherent->id]) }}" method="POST">
    @csrf
    <div>
        <label for="name">Nom</label>
        <input type="text" name="name" id="name" value="{{$adherent->name}}" required>
    </div>
    <div>
        <label for="firstname">Prénom</label>
        <input type="text" name="firstname" id="firstname"  value="{{$adherent->firstname}}" required>
    </div>
    <div>
        <label for="email">email</label>
        <input type="text" name="email" id="email"  value="{{$adherent->email}}" required>
    </div>
    <div>
        <label for="phone">Téléphone</label>
        <input type="text" name="phone" id="phone"  value="{{$adherent->phone_number}}" required>
    </div>
    <button type="submit">Modifier</button>
</form>

