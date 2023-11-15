<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- google font -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="style_index.css">
    <!-- .............................................................. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-pzjw8P+L6UOKPcZtmeht5Vc8AhrU5KXjHj6pNFfDRv3axdVA0bkcQ5RraN3dcl5q" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-y0qSdbJ6y/Fi3v4zHtL8sTskFq9zFSeC6oAe9rK4RwYcfpZjUc9KGdP1UyJp+1U" crossorigin="anonymous">
    <title>Formulaire Multi-Étapes avec Barre de Progression</title>
    <style>
        .step-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 10rem;
        }

        .step-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 569px; /* Ajout pour définir la largeur du formulaire */
     
        }

        .progress {
            margin-bottom: 20px;
        }

        .progress-bar {
            transition: width 0.5s ease-in-out;
        }

        .step {
            display: none;
        }

        .step.active {
            display: block;
        }
    </style>
</head>

<body>
    <!-- bootstrap css -->
    @include('navbar.navbar')
    <div class="step-container">
        <div class="step-form pt-1">
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>

            <div id="step1" class="step active">
                <h2>Étape 1</h2>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="Nom" class="form-label">Nom de l'evenement</label>
                        <input type="text" class="form-control" id="NomEevenment" name="nomEvenement">
                    </div>
                    <div class="col-lg-6">
                        <label for="Type" class="form-label">Type de l'evenement</label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="Lieu" class="form-label">Lieu de l'evenement</label>
                        <input type="text" class="form-control" id="Lieu" name="lieu">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="Heure" class="form-label">Heure</label>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Fuseau Horaire</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="Lieu" class="form-label">Date Debut/Fin evenement</label>
                        <input type="text" class="form-control" id="Lieu" name="lieu">
                    </div>
                </div>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>
            </div>

            <div id="step2" class="step">
                <h2>Étape 2</h2>
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="Non" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="Nom" name="nom" aria-describedby="emailHelp">
                    </div>
                    <div class="col-lg-6">
                        <label for="Non" class="form-label">Nom</label>

                        <select class="form-select" aria-label="Default select example" name="tuteur">
                            <option selected>Tuteurs</option>
                            <option value="">
                                    lll
                            </option>


                        </select>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Précédent</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>


                <div id="step3" class="step">
                    <h2>Étape 3</h2>
                    <div class="mb-3">
                        <label for="field3" class="form-label">Champ 3</label>
                        <input type="text" class="form-control" id="field3" name="field3">
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="prevStep()">Précédent</button>
                    <button type="submit" class="btn btn-success">Soumettre</button>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-e3+8Xj1aNqDVM+TObQAAKk4DO8shQhxWNVZn5b2iRXLpHQRsjz5gC5CIS+HdXHaa"
            crossorigin="anonymous"></script>

        <script>
            let currentStep = 1;

            function nextStep() {
                const current = document.getElementById('step' + currentStep);
                const next = document.getElementById('step' + (currentStep + 1));

                if (next) {
                    current.classList.remove('active');
                    next.classList.add('active');
                    updateProgressBar(++currentStep);
                }
            }

            function prevStep() {
                const current = document.getElementById('step' + currentStep);
                const prev = document.getElementById('step' + (currentStep - 1));

                if (prev) {
                    current.classList.remove('active');
                    prev.classList.add('active');
                    updateProgressBar(--currentStep);
                }
            }

            function updateProgressBar(step) {
                const progressBar = document.querySelector('.progress-bar');
                const progressValue = (step - 1) * 50; // 33% for each step
                progressBar.style.width = progressValue + '%';
                progressBar.setAttribute('aria-valuenow', progressValue);
            }
        </script>

</body>

</html>