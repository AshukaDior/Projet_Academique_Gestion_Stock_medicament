<?php
session_start();
ob_start();

if (!empty($_SESSION['id'])) {
  $_GET['id'] = $_SESSION['id'];
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
    <link rel="stylesheet" href="css/home.style.css" />
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
                <p> <?php echo $_SESSION['nom_complet'] ?> </p>
                <p>Pharmacien <?php echo $_SESSION['role'] ?></p>
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
      <div class="row-1">
        <div class="stats-box">
          <div class="title-row">
            <div class="title-box">
              <h2>Statistiques</h2>
              <hr />
            </div>
            <div class="switch-btn-filter">
              <button>Mois</button>
              <button>semaine</button>
            </div>
          </div>
          <div class="img-box">
            <img src="assets/img/Chart.jpg" alt="statistiques" />
          </div>
          <div class="legends-row">
            <div class="legend-item">
              <span class="legend-color"> </span>
              <p>Clients</p>
            </div>
            <div class="legend-item">
              <span class="legend-color"> </span>
              <p>Revenus</p>
            </div>
            <div class="legend-item">
              <span class="legend-color"> </span>
              <p>Bénéfices</p>
            </div>
          </div>
          <div class="btns-row">
            <button><i class="bx bx-plus"></i>Plus</button>
          </div>
        </div>
        <div class="counters-box">
          <div class="counter-item">
            <div class="counter-title-box">
              <p class="counter-title">Nombre de visite</p>
              <p class="counter-number">2 355</p>
              <p class="counter-date">Mai 23 - Juillet 21 (2023)</p>
              <p class="counter-icon-stat">
                <span class="counter-stat">19.7%</span> depuis le dernier mois
              </p>
            </div>
            <div class="counter-icon-box">
              <i class="bx bxs-user"></i>
            </div>
          </div>
          <div class="counter-item">
            <div class="counter-title-box">
              <p class="counter-title">Revenus</p>
              <p class="counter-number">1M. F CFA</p>
              <p class="counter-date">Mai 23 - Juillet 21 (2023)</p>
              <p class="counter-icon-stat">
                <span class="counter-stat">9.3%</span> depuis le dernier mois
              </p>
            </div>
            <div class="counter-icon-box">
              <i class="bx bxs-wallet"></i>
            </div>
          </div>
          <div class="counter-item">
            <div class="counter-title-box">
              <p class="counter-title">PROFITS</p>
              <p class="counter-number">2 355</p>
              <p class="counter-date">Mai 23 - Juillet 21 (2023)</p>
              <p class="counter-icon-stat">
                <span class="counter-stat">5.7%</span> depuis le dernier mois
              </p>
            </div>
            <div class="counter-icon-box">
              <i class="bx bx-money-withdraw"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="row-2">
        <div class="column-1">
          <div class="row-btns-group">
            <button class="btn btn-outline">
              <i class="bx bx-plus"></i>Nouveau Medicament
            </button>
            <button class="btn btn-fill">
              <i class="bx bx-cart-add"></i>Nouvelle vente
            </button>
          </div>
          <div class="buys">
            <div class="title-row">
              <div class="title-box">
                <h2>Bon d'achat</h2>
                <hr />
              </div>
              <button>Voir Plus</button>
            </div>
            <div class="table-buys-data">
              <table>
                <thead>
                  <tr>
                    <td>Initiateur</td>
                    <td>Nb médica.</td>
                    <td>Dépenses</td>
                    <td>Status</td>
                    <td>Bénéfices estimé</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mbieko</td>
                    <td>2000</td>
                    <td>200.000FCFA</td>
                    <td>en attente</td>
                    <td>70.000FCFA</td>
                  </tr>
                  <tr>
                    <td>Mbieko</td>
                    <td>2000</td>
                    <td>200.000FCFA</td>
                    <td>en attente</td>
                    <td>70.000FCFA</td>
                  </tr>
                  <tr>
                    <td>Mbieko</td>
                    <td>2000</td>
                    <td>200.000FCFA</td>
                    <td>en attente</td>
                    <td>70.000FCFA</td>
                  </tr>
                  <tr>
                    <td>Mbieko</td>
                    <td>2000</td>
                    <td>200.000FCFA</td>
                    <td>en attente</td>
                    <td>70.000FCFA</td>
                  </tr>
                  <tr>
                    <td>Mbieko</td>
                    <td>2000</td>
                    <td>200.000FCFA</td>
                    <td>en attente</td>
                    <td>70.000FCFA</td>
                  </tr>
                  <tr>
                    <td>Mbieko</td>
                    <td>2000</td>
                    <td>200.000FCFA</td>
                    <td>en attente</td>
                    <td>70.000FCFA</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="column-2">
          <div class="title-row">
            <div class="title-box">
              <h2>Activités recentes</h2>
              <hr />
            </div>
          </div>
          <div class="activities">
            <div class="activity-item">
              <div class="activity-img">
                <img src="assets/img/avatar 1.png" alt="" />
              </div>
              <div class="activity-text-box">
                <div class="activity-user-role">
                  <h4>Mbieko Jean Paul</h4>
                  <p>Pharmacien assistant</p>
                </div>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae totam est
                </p>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-img">
                <img src="assets/img/avatar 2.png" alt="" />
              </div>
              <div class="activity-text-box">
                <div class="activity-user-role">
                  <h4>Mbieko Jean Paul</h4>
                  <p>Pharmacien assistant</p>
                </div>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae totam est hic!
                </p>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-img">
                <img src="assets/img/avatar 3.png" alt="" />
              </div>
              <div class="activity-text-box">
                <div class="activity-user-role">
                  <h4>Mbieko Jean Paul</h4>
                  <p>Pharmacien assistant</p>
                </div>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae totam est hic!
                </p>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-img">
                <img src="assets/img/avatar 4.png" alt="" />
              </div>
              <div class="activity-text-box">
                <div class="activity-user-role">
                  <h4>Mbieko Jean Paul</h4>
                  <p>Pharmacien assistant</p>
                </div>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Molestiae totam est hic!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script>
  </body>
</html>
