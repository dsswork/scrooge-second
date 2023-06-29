<?php
class Contact
{
    public static function all()
    {
        $userId = $_SESSION['user_id'];
        $sql = "SELECT * FROM contacts WHERE user_id='$userId'";
        $result = pdo()->query($sql);

        $contacts = $result->fetchAll();
        return $contacts;
    }

    public static function create($title, $email, $phone, $userId)
    {
        $userId = $_SESSION['user_id'];
        $sql = "INSERT INTO contacts (name, phone, email, user_id)
                VALUES ('$title', '$phone', '$email', '$userId')";

        pdo()->exec($sql);

        $sql = "SELECT * FROM contacts ORDER BY id DESC LIMIT 1";

        $contact = pdo()->query($sql)->fetch();

        return $contact;
    }

    public static function find($id)
    {
        $sql = "SELECT * FROM contacts WHERE id ='$id'";

        $result = pdo()->query($sql);

        return $result->fetch();
    }
    public static function update($id, $name, $email, $phone) {
        $sql = "UPDATE contacts
                SET name = '$name', email = '$email', phone = '$phone'
                WHERE id='$id'";

        pdo()->exec($sql);
    }
    public static function destroy($id)
    {
        $sql = "DELETE FROM contacts WHERE id = '$id'";
        pdo()->exec($sql);
    }

}
