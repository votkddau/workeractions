/* 1  */
select distinct p.id as productId, p.name as productName, cat2.id as categoryId, cat2.name as CategoryName
from products p
left join productsCategories pc on pc.productId = p.id
left join categories cat1 on cat1.id = pc.categoryId
left join categories cat2 on (cat2.lft <= cat1.lft and cat2.rgt >= cat1.rgt)
where p.id in (1,3);

/* 2 */
select cat1.id as categoryId, cat1.name as categoryName, p.id as productId, p.name as productName, p.cnt as productCnt
from categories cat1
left join categories cat2 on (cat2.lft >= cat1.lft and cat2.rgt <= cat1.rgt)
left join productsCategories as pc on pc.categoryId = cat2.id
left join products p on p.id = pc.productId
where cat1.id in (5,6,8)
and p.cnt > 0
group by cat1.id, p.id
order by cat1.id, p.id;

/* 3 */
select cat1.id as categoryId, cat1.name as categoryName, count(p.id) as productCount
from categories cat1
left join categories cat2 on (cat1.lft <= cat2.lft and cat1.rgt >= cat2.rgt)
left join productsCategories pc on pc.categoryId = cat2.id
left join products p on p.id = pc.productId
where cat1.id in (6,9)
/* exclude products in several different categories*/
and not exists (select pc2.categoryId
               from productsCategories pc2
         inner join categories cat3 on cat3.id = pc2.categoryId
              where pc2.productId = pc.productId
                and (cat3.rgt < cat1.lft or cat3.lft > cat1.rgt)
)
/* taking one product if it's in several subcategories (for example product.id=4)*/
and not exists (select pc3.categoryId
               from productsCategories pc3
         inner join categories cat4 on cat4.id = pc3.categoryId
              where pc3.productId = pc.productId
                and (cat4.lft > cat2.lft or cat4.rgt < cat2.rgt)
)
group by cat1.id
order by cat1.id;

/* 4 */
select distinct p.id as productId, p.name as productName, cat1.id as categoryId, cat1.name as categoryName, p.cnt
from categories cat1
left join categories cat2 on (cat1.lft <= cat2.lft and cat1.rgt >= cat2.rgt)
left join productsCategories pc on pc.categoryId = cat2.id
left join products p on p.id = pc.productId
where cat1.id in (6,7,8);