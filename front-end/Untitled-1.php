<?php
session_start();
include("db.php"); 
                                                if(isset($_SESSION['user'])){
                                                    echo $_SESSION['user'];
                                                    $sql = "SELECT * FROM users WHERE fname = '" .strtolower( $_SESSION['user'] ) . "'";
                                                    $result = $conn->query($sql);
                                                    $row = $result->fetch_assoc();
                                                    $name = $_SESSION['user']." ".$row['lname'];
                                                    echo $name;
                                                }
                                                ?>