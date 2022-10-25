package com.example.ecommerce.Service.WishList;

import com.example.ecommerce.Model.WishList;

import java.util.List;

public interface IWishListService {

    void createWishlist(WishList wishList);

    List<WishList> readWishList(Integer userId);
}
