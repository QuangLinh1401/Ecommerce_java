package com.example.ecommerce.Service.WishList;

import com.example.ecommerce.Model.WishList;
import com.example.ecommerce.Repository.WishListRepository;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class WishListService implements IWishListService{

    private final WishListRepository wishListRepository;

    public WishListService(WishListRepository wishListRepository) {
        this.wishListRepository = wishListRepository;
    }

    @Override
    public void createWishlist(WishList wishList) {
        wishListRepository.save(wishList);
    }

    @Override
    public List<WishList> readWishList(Integer userId) {
        return wishListRepository.findAllByUserIdOrderByCreatedDateDesc(userId);
    }
}
