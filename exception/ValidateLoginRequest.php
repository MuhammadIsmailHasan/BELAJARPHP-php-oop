<?php

require_once __DIR__ . "/ValidateException.php";

// validateException adalah class buatan sendiri yang wajib extends exception
// exception adalah class bawaan php
// THROW ADALAH MENGARAHKAN/MELEMPAR JIKA ADA ERROR
// format => throw "inisiasi object dari class/child class exception"
// throw "objek" harus ditangkan oleh try catch AGAR PROGRAM TIDAK TERHENTI

class ValidateLoginRequest
{
    public function validateLogin(LoginRequest $request) {
        if (!isset($request->usernama)) {
            throw new ValidateException("usernama tidak boleh null (dari validate exception)");
        } else if (!isset($request->password)) {
            throw new ValidateException("password tidak boleh null (dari validate exception)");
        } else if (trim($request->usernama) == "") {
            throw new Exception("usernama kosong (dari exception)");
        } else if (trim($request->password) == "") {
            throw new Exception("password kosong (dari exception)");
        }
    }
}