package com.example.ecommerce.Repository;

import com.example.ecommerce.Model.OrderItem;
import org.springframework.data.jpa.repository.JpaRepository;

import java.util.List;

public interface OrderItemsRepository extends JpaRepository<OrderItem,Integer> {

}
