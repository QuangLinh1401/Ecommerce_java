package com.example.ecommerce.Service.Category;

import com.example.ecommerce.Model.Category;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

public interface ICategoryService {

    List<Category> listCategories();

    void createCategory(Category category);

    Category readCategory(String categoryName);

    Optional<Category> readCategory(Integer categoryId);

    void updateCategory(Integer categoryID, Category newCategory);
}
