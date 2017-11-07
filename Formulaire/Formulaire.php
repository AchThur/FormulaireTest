<DOCTYPE html> 
<html>
<head> 
	<title> Site internet </title>
	<link rel="stylesheet" href="StyleSheet/FormulaireCss.css"/>
</head>

	<body> 
		<form method="POST" action="Formulaire2reception.php" name="Formulaire"/>
			  <form class="form-basic" method="post" action="FormulaireReception.php">

            <div class="form-title-row">
                <h1>FORMULAIRE</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Nom Complet</span>
                    <input type="text" name="name" required>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" required>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Dropdown</span>
                    <select name="dropdown">
                        <option>Option One</option>
                        <option>Option Two</option>
                        <option>Option Three</option>
                        <option>Option Four</option>
                    </select>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Textarea</span>
                    <textarea name="textarea"></textarea>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Checkbox</span>
                    <input type="checkbox" name="checkbox" checked>
                </label>
            </div>

            <div class="form-row">
                <label><span>Radio</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 1</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 2</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 3</span>
                        </label>
                    </div>

                </div>
            </div>

            <div class="form-row">
                <button type="submit">Envoyer</button>
            </div>

        </form>

    </div>




	</body>