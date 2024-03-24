<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Vérification du code</div>
                <div class="card-body">
                    <p>Bonjour {{ $user->username }},</p>
                    <p>Veuillez utiliser le code suivant pour vérifier votre adresse e-mail :</p>
                    <h2 class="text-center">{{ $verificationCode }}</h2>
                    <p>Si vous n'avez pas demandé cette vérification, vous pouvez ignorer cet e-mail.</p>
                    <p>Merci,</p>
                    <p>L'équipe BENINDOKOUN   <span style="color: #089938;">BENIN</span><span style="color: #F18829">DO</span>
                        <span style="color: brown">KOUN</span></p>
                </div>
            </div>
        </div>
    </div>
</div>