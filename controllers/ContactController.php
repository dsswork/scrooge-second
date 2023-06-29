<?php
require_once('models/Contact.php');


class ContactController
{
    public function index()
    {
        auth_guard();
        $pools = Contact::all();
        view('contacts/index', $pools);
    }

    public function create()
    {
        auth_guard();
        view('contacts/create');
    }

    public function store()
    {
        auth_guard();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $userId = $_SESSION['user_id'];

        Contact::create($name, $email, $phone, $userId);

        redirect('/');
    }

    public function edit($id)
    {
        auth_guard();
        $contact = Contact::find($id);
        view('contacts/edit', compact('contact'));
    }

    public function update($id)
    {
        auth_guard();

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        Contact::update($id, $name, $email, $phone);

        redirect('/');
    }

    public function destroy($id)
    {
        auth_guard();
        Contact::destroy($id);
        redirect('/');
    }

}