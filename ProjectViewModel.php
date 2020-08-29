<?php
require 'MODEL.php';

class ProjectViewModel extends MODEL {

  public function __construct() {
    $this->data_base = "tuncayb_portfolio";
    $this->table = "project_view";
    $this->table_columns = "(
      id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
      name TEXT NOT NULL,
      title VARCHAR(30) NOT NULL,
      paragraph VARCHAR(256),
      img MEDIUMBLOB,

      archived CHAR(1) DEFAULT 'n',
      category VARCHAR(10) DEFAULT 'general'
    )";
    $this->createDataBase();
    $this->createTable();
  }

  public function add($name, $title, $paragraph, $img, $category = 'general') {
    $this->query("INSERT INTO $this->table (name, title, paragraph, category) VALUES (?,?,?,?)", $name, $title, $paragraph, $category);
    $this->queryBlob("UPDATE $this->table SET img = ? WHERE name = ? AND title = ?", $img, $name, $title);
  }

  public function update_name($new_name, $id) {
    $this->query("UPDATE $this->table SET name = ? WHERE id = ?", $new_name, $id);
  }
  public function update_title($new_title, $id) {
    $this->query("UPDATE $this->table SET title = ? WHERE id = ?", $new_title, $id);
  }
  public function update_paragraph($new_paragraph, $id) {
    $this->query("UPDATE $this->table SET paragraph = ? WHERE id = ?", $new_paragraph, $id);
  }
  public function update_category($new_category, $id) {
    $this->query("UPDATE $this->table SET category = ? WHERE id = ?", $new_category, $id);
  }
  public function update_img($new_img, $id) {
    $this->queryBlob("UPDATE $this->table SET img = ? WHERE id = ?", $new_img, $id);
  }

  public function archive($name, $title) {
    $this->query("UPDATE $this->table SET archived = ? WHERE name = ? AND title = ?", "y", $name, $title);
  }
  public function unArchive($name, $title) {
    $this->query("UPDATE $this->table SET archived = ? WHERE name = ? AND title = ?", "n", $name, $title);
  }

  public function delete($name, $title) {
    $this->query("DELETE FROM $this->table WHERE name = ? AND title = ?", $name, $title);
  }

  public function get_all() {
    return $this->query("SELECT name, title, paragraph, category, archived FROM $this->table");
  }

  public function get_unarchived() {
    return $this->query("SELECT name, title, paragraph, category FROM $this->table WHERE archived = ?", "n");
  }

  public function get_img($name) {
    $result = $this->query("SELECT img FROM $this->table WHERE name = ?", $name);
    while ($result && $row = $result->fetch_assoc()) {
      return $row['img'];
    }
    return "Error";
  }
}
