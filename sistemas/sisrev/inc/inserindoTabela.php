<?php
                require_once('../config/query.php');
                require_once('../../../config/databases.php');

                
                $conSucesso = $conn->query($queryTabela);
                $row = $conSucesso->fetch_assoc();
                
                

                while($row = $conSucesso->fetch_assoc()){

                 
                  $consorcio = ($row["CONSORCIO"] == 'S') ? 'SIM' : 'NÃO';

                  $situacao = ($row["SITUACAO"] == 'A') ? 'ATIVO' : 'DESATIVADO';

                  
                  switch ($row["SISTEMA"]) {
                    case "A":
                        $sistemaMysql = "APOLLO";
                        break;
                    case "N":
                        $sistemaMysql = "BANCO NBS";
                        break;
                    case "H":
                        $sistemaMysql = "BANCO HARLEY";
                        break;
                    case " ":
                        $sistemaMysql = "EMPRESA QUE NÃO USA SISTEMA ERP";
                        break;
                    case "0":
                        $sistemaMysql = "EMPRESA QUE NÃO USA SISTEMA ERP";
                        break;
                }

                  echo '<tr>
                  <td>'.$row["id"].'</td>
                  <td>'.$row["NOME_EMPRESA"].'</td>
                  <td>'.$row["UF_GESTAO"].'</td>
                  <td>'.$sistemaMysql.'</td>
                  <td>'.$consorcio.'</td>
                  <td>'.$situacao.'</td>
                  <td><a href="editEmp.php?pg='.$_GET["pg"].'&tela=3&ID='.$row["ID_EMPRESA"].'" title="Editar" class="btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                            
                            <a href="../front/deletarEmp.php?ID='.$row["ID_EMPRESA"].'" title="Desativar" class="btn-danger btn-sm"><i class="bi bi-trash"></i></a>

                            <a href="#" data-bs-toggle="modal" data-bs-target="#idempresa'.$row["ID_EMPRESA"].'" title="Exibir mais informações" class="btn-info btn-sm"><i class="bi bi-eye-fill"></i></a>
                        </td>
              </tr>';
      }
