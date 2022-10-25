package com.example.ecommerce.Service.Cart;

import com.example.ecommerce.DTO.Cart.AddToCartDto;
import com.example.ecommerce.DTO.Cart.CartDto;
import com.example.ecommerce.DTO.Cart.CartItemDto;
import com.example.ecommerce.Exception.CartItemNotExistException;
import com.example.ecommerce.Model.Cart;
import com.example.ecommerce.Model.Product;
import com.example.ecommerce.Model.User;

public interface ICartService {

    static CartItemDto getDtoFromCart(Cart cart) {
        return new CartItemDto(cart);
    }

    void addToCart(AddToCartDto addToCartDto, Product product, User user);

    CartDto listCartItems(User user);

    void updateCartItem(AddToCartDto cartDto, User user, Product product);

    void deleteCartItem(int id, int userId) throws CartItemNotExistException;

    void deleteCartItems(int userId);

    void deleteUserCartItems(User user);
}
