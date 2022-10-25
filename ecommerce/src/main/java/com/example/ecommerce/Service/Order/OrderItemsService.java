package com.example.ecommerce.Service.Order;

import com.example.ecommerce.Model.OrderItem;
import com.example.ecommerce.Repository.OrderItemsRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class OrderItemsService implements IOrderItemsService{
    @Autowired
    private OrderItemsRepository orderItemsRepository;

    @Override
    public void addOrderedProducts(OrderItem orderItem) {
        orderItemsRepository.save(orderItem);
    }
}
