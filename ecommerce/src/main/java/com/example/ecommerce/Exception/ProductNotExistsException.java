package com.example.ecommerce.Exception;

public class ProductNotExistsException extends Throwable {
    public ProductNotExistsException(String message) {
        super(message);
    }
}
