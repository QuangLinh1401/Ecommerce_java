package com.example.ecommerce.Exception;

public class CustomException extends IllegalArgumentException{
    public CustomException(String message){
        super(message);
    }
}
