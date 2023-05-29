<?php
require_once("db.php");
$users = $bdd->prepare("SELECT * FROM pharmaciens ORDER BY id DESC");
$users->execute();
$result = $users->fetchAll();
session_start();
ob_start();

if (!empty($_SESSION['id'])) {
  $_GET['id'] = $_SESSION['id'];
}
/*ajouter un utilisateur en BB*/
if (!empty($_POST["add_user"])) {
  $sql = "INSERT INTO pharmaciens ( nom_complet, email, role ) VALUES ( :nom_complet, :email, :role )";
  $newUserReq = $bdd->prepare($sql);

  $result = $newUserReq->execute(array(':nom_complet' => $_POST['nom_complet'], ':email' => $_POST['email'], ':role' => $_POST['role']));
  if (!empty($result)) {
    header('location:utilisateur.php');
  }
}

?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Sidebar Menu | Side Navigation Bar</title>-->
    <!-- CSS -->
    <link rel="stylesheet" href="css/utilisateur.style.css" />
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <div class="nav-header-bar">
          <div class="search-box">
            <i class="bx bx-search icon-font"></i>
            <input
              type="text"
              name="search"
              id="search-input"
              class="input-search"
              placeholder="Rechercher..."
            />
          </div>
          <div class="user-box">
            <i class="bx bxs-bell icon-font"></i>
            <div class="user">
              <img
                src="assets/img/avatar.jpg"
                alt="avatar utilisateur"
                class="user-profile-img"
              />
              <div class="user-infos">
                <p>Johane NK</p>
                <p>Pharmacien Principal</p>
              </div>
            </div>
            <i class="bx bx-chevron-down"></i>
          </div>
        </div>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon white"></i>
          <span class="logo-name white"
            >Easy <span class="text-green-light">PHARMAR</span></span
          >
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="./home.php?id=<?php echo $_SESSION['id'] ?>" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Accueil</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Ventes</span>
              </a>
            </li>
            <li class="list">
              <a href="./stocks.html" class="nav-link">
                <i class="bx bx-bell icon"></i>
                <span class="link">Stocks</span>
              </a>
            </li>
            <li class="list">
              <a href="./utilisateur.php?id=<?php echo $_SESSION['id'] ?>" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">Utilisateurs</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-pie-chart-alt-2 icon"></i>
                <span class="link">Bon d'achats</span>
              </a>
            </li>
          </ul>

          <div class="bottom-cotent">
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-cog icon"></i>
                <span class="link">Settings</span>
              </a>
            </li>
            <li class="list">
              <a href="./logout.php" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>

    <section class="overlay"></section>
    <main>
      <div class="row">
        <div class="column">
          <div class="buys">
            <div class="title-row">
              <div class="title-box">
                <h2>Utilisateurs</h2>
                <hr />
              </div>
              <div>
                <button class="btn btn-filter">
                  <i class="bx bxs-filter-alt"></i>
                </button>
                <button class="btn btn-new-user" id="btn-new-user">
                  <i class="bx bx-plus"></i>Nouveau
                </button>
              </div>
            </div>
            <div class="table-buys-data">
              <table>
                <thead>
                  <tr>
                    <td>Nom complet</td>
                    <td>Email.</td>
                    <td>Role</td>
                    <td>Dernières</td>
                    <td>Actions</td>
                  </tr>
                </thead>
                <tbody>
                <?php
                if (!empty($result)) {
                  foreach ($result as $row) {
                    ?>
                                                                                  <tr>
                                                                                 <td><?php echo $row["nom_complet"]; ?></td>
                                                                                 <td><?php echo $row["email"]; ?></td>
                                                                                 <td>P. <?php echo $row["role"]; ?></td>
                                                                                 <td><?php echo date('l \t\h\e jS') ?></td>
                                                                                <td class="actions-btn">
                                                                                 <button class="btn btn-trash" type="submit" value="" name="remove_user">
                                                                                  <a href="deleteUser.php?id=<?php echo $row['id']; ?>"><i class="bx bxs-trash"></i></a>
                                                                                 </button>
                                                                                 <button class="btn btn-edit" type="submit" value="<?php echo $row['id']; ?>" name="edit-btn">
                                                                                 <i class="bx bxs-edit-alt"></i>
                                                                                </button>
                                                                                 </td>
                                                                                 </tr>
                                                                         <?php
                  }
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="user-modal">
      <div class="title-row">
        <div class="title-box">
          <h2>Ajouter un utilisateur</h2>
          <hr />
        </div>
      </div>
      <div class="modal-wrapper">
        <form action="utilisateur.php" class="new-user-form" method="POST">
          <div class="text-field">
            <i class="icon bx bxs-user"></i>
            <input
              type="text"
              name="nom_complet"
              id="name-text-field"
              required
              placeholder="Nom complet"
            />
          </div>
          <div class="text-field">
            <i class="icon bx bxs-envelope"></i>

            <input
              type="email"
              name="email"
              id="email-text-field"
              required
              placeholder="Email"
            />
          </div>
          <div class="text-field">
            <i class="icon bx bx-list-ul"></i>
            <select name="role" id="user-role">
              <option value="principal">Pharmacien Principal</option>
              <option value="assistant">Pharmacien assistant</option>
            </select>
          </div>
          <div class="btn-group">
            <button type="submit" id="save-btn" name="add_user" value="add_user" class="btn new-user-btn">
              Enregister
            </button>
            <button type="reset" id="reset-btn" class="btn reset-btn">
              Annuler
            </button>
          </div>
        </form>
      </div>
    </div>
    <section class="overlayModal"></section>

    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");
      const overlayModal = document.querySelector(".overlayModal");
      const userModal = document.querySelector(".user-modal");
      const newUserBtn = document.querySelector("#btn-new-user");
      const resetBtn = document.querySelector("#reset-btn");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });
      newUserBtn.addEventListener("click", () => {
        userModal.classList.toggle("open");
      });
      resetBtn.addEventListener("click", () => {
        userModal.classList.toggle("open");
      });
      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
      overlayModal.addEventListener("click", () => {
        userModal.classList.remove("open");
      });
    </script>
  </body>
</html>
